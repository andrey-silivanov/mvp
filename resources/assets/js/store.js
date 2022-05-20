const CART_KEY = 'cart'
const WISH_LIST_KEY = 'wishlist'

let store = {
    state: {
        cart: [],
        wishList: [],
        authUser: window.authUser,
        loaderShow: false
    },
    getters: {
        cartProducts: (state) => state.cart,
        productInCart: (state) => (product) => state.cart.some(item => item.id === product.id),
        getProductFromCart: (state) => (productId) => state.cart.find(product => product.id === productId),
        allProductCount: (state) => state.cart.reduce(function (sum, item) {
            return sum + item.count
        }, 0),
        totalAmount: (state) => state.cart.reduce(function (sum, item) {
            let amount = parseFloat(sum) + (parseFloat(item.price) * item.count)
            return amount.toFixed(2)
        }, 0),
        loaderShow: state => state.loaderShow,
        authUser: state => state.authUser,
        wishList: state => state.wishList,
        productInWishList: state => (productId) => state.wishList.some(item => item === productId),
        allProductInWishListCount: state => state.wishList.length
    },
    mutations: {
        /* CART */
        initCart(state, products) {
            state.cart = products
        },
        addToCart(state, product) {
            let oldItem = state.cart.find(item => item.id === product.id)
            if (!oldItem) {
                product.count++
                state.cart.push(product);
            } else {
                oldItem.count++;
            }
        },
        saveCart(state) {
            window.localStorage.setItem(CART_KEY, JSON.stringify(state.cart));
            if (state.authUser) {
                axios.post('/ajax/cart/save', state.cart)
            }
        },
        removeFromCart(state, product) {
            let index = state.cart.findIndex(item => item.id === product.id);
            product.count = 0
            if (index > -1) {
                let product = state.cart[index];
                state.cartCount -= product.count;

                state.cart.splice(index, 1);
            }
        },
        decrementCountCartProduct(state, product) {
            state.cart.filter((obj, index) => {
                if (obj.id === product.id) {
                    if (state.cart[index].count <= 1) {
                        state.cart[index].count--;
                        state.cart.splice(index, 1);
                    } else {
                        state.cart[index].count--;
                    }
                }
            });
        },
        clearCart(state) {
            state.cart = [];
        },

        loaderStart(state) {
            state.loaderShow = true
        },
        loaderStop(state) {
            state.loaderShow = false
        },
        /* WISH LIST */
        initWishList(state, products) {
            state.wishList = products
        },
        addProductToWishList(state, productId) {
            let oldItem = state.wishList.find(item => item === productId)
            if (!oldItem) {
                state.wishList.push(productId);
            }
        },
        removeProductFromWishList(state, productId) {
            let index = state.wishList.findIndex(item => item === productId);

            if (index > -1) {
                state.wishList.splice(index, 1);
            }

        },
        saveWishList(state) {
            window.localStorage.setItem(WISH_LIST_KEY, JSON.stringify(state.wishList));
            if (state.authUser) {
                axios.post('/ajax/wishlist/save', {wishList: state.wishList})
            }
        },
    },
    actions: {
        /* CART */
        addProductToCart({commit, getters}, product) {
            commit('addToCart', product)
            commit('saveCart', product)
        },
        incrementCountProduct({commit, getters}, product) {
            commit('addToCart', product)
            commit('saveCart')
        },

        decrementCountProduct({commit, getters}, product) {
            commit('decrementCountCartProduct', product)
            commit('saveCart')
        },
        initCart({commit}) {
            let cartLS = window.localStorage.getItem(CART_KEY);
            cartLS = cartLS ? JSON.parse(cartLS) : []

            axios.post('/ajax/cart', {cart: cartLS}).then(
                response => {
                    commit('initCart', response.data.data)
                    commit('saveCart')
                },
                error => console.log(error)
            )
        },
        removeFromCart({commit, getters}, product) {
            commit('removeFromCart', product)
            commit('saveCart')
        },
        clearCart({commit}) {
            commit('clearCart')
            commit('saveCart')
        },
        loaderStart({commit}) {
            commit('loaderStart')
        },
        loaderStop({commit}) {
            commit('loaderStop')
        },
        /* WISH LIST */
        initWishList({commit}) {
            let products = window.localStorage.getItem(WISH_LIST_KEY);
            products = products ? JSON.parse(products) : []
            let result = []
            axios.post('/ajax/wishlist', {wishList: products}).then(
                response => {
                     response.data.data.forEach((item) => {
                         result.push(item.id)
                     })
                    commit('initWishList', result)
                    commit('saveWishList')
                },
                error => console.log(error)
            )
            commit('initWishList', products)
        },
        addProductToWishList({commit}, productId) {
            commit('addProductToWishList', productId)
            commit('saveWishList')
        },
        removeProductFromWishList({commit, dispatch}, productId) {
            commit('removeProductFromWishList', productId)
            commit('saveWishList')
        }
    }
};

export default store
