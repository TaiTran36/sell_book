<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function message(Request $request)
    {

        $httpClient = new CurlHTTPClient('mS6j1v3CXNMiFicZSRsBVV131caWlAcr6x6wX78lezNKXyEHcoWbmcUjZsjfotQINGeVVIjX9l2AXtFwZTGpe1AeRcdT0+3IiSFdRdFfke6W419xaM8Z8Mb7rC38OI3w9qap+cLSoWJpHof38JOhtAdB04t89/1O/w1cDnyilFU=');
//        dd($request->all());
        $bot = new LINEBot($httpClient, ['channelSecret' => 'f015e13fb2c05a44b1a93d0020b9a0cc']);
//        $result = json_encode($bot->getNumberOfFollowers( new \DateTime('2020-12-03')));
        $result = json_encode($bot->pushMessage('U6900103bc9d0d143b258bcd188a6dc54', new TextMessageBuilder('hi')));
        $a = json_encode($httpClient);
        $b = json_encode($bot);
        return view('message', compact('a', 'b', 'result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
