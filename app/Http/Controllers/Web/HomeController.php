<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\ElasticsearchQueryBuilder\Queries\RangeQuery;
use Spatie\ElasticsearchQueryBuilder\Builder;
use Spatie\ElasticsearchQueryBuilder\Queries\TermQuery;

class HomeController extends Controller
{
    public function __construct(private Client $client)
    {
    }

    public function home()
    {
        $t = Str::title(str_replace('_', ' ', 'los_angeles'));
        dd($t);
        $countries = Country::whereIn('id', [231, 38, 230])->with('states', 'states.cities')->get();
//
//        dd($country);

        $builder = new Builder($this->client);
        $builder->index('eros-2022-05');
        //  $builder->addQuery(RangeQuery::create('age')->gte(18));
        $builder->size(10);
        $results = $builder->search();
        $res = [];
        foreach ($results['hits']['hits'] as $item) {
            $res[] = $item['_source'];
        }

        return view('home', [
            'result' => $res,
            'countries' => $countries
        ]);
    }

    public function test()
    {
//        $client = ClientBuilder::create()
//            ->setHosts(['mvp_elasticsearch:9200'])
//            ->build();
//        $response = $client->info();
//        dd($response);
        //  $client = ClientBuilder::create()->build();

        //  dd($this->client);
        $builder = new Builder($this->client);
        $builder->index('eros-2022-05');
        //  $builder->addQuery(RangeQuery::create('age')->gte(18));
        $builder->size(20);
        $results = $builder->search();
        $res = [];
        foreach ($results['hits']['hits'] as $item) {
            $res[] = $item['_source'];
        }
        // dd($res[0]);

        return view('test', ['result' => $res]);
    }

    public function ad(int $id)
    {
        $builder = new Builder($this->client);
        $builder->index('eros-2022-05');
        $builder->addQuery(TermQuery::create('oldId', $id));

        $results = $builder->search();
        foreach ($results['hits']['hits'] as $item) {
            $res = $item['_source'];
        }
        // dd($res[0]);

       // dd($res);

        return view('ads.single', ['result' => $res]);
    }
}
