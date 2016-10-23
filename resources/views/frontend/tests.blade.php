@extends('frontend.layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-12 ">

            <div class="panel panel-default" style="padding:12px">
            
            <h2>Tests  <?php echo PHP_OS  ?> </h2><br><br>
<?php

    //$today = @datetime($var)
    //echo $dvar->formatLocalized('%d.%m.%y ').'<br><br><hr>';

    $data = session()->all();

     echo '<pre>';
    var_dump( $data );
     echo '</pre>';
    //setlocale(LC_TIME, 'de');
    //setlocale(LC_TIME, 'de_DE'); 
    //setlocale(LC_TIME, 'German'); 
    echo '<hr>';


$now = Carbon\Carbon::now();
echo $now.'<br><br>';                               // 2016-06-24 15:18:34
$today = Carbon\Carbon::today();
echo $today .'<br><br>';                             // 2016-06-24 00:00:00
$tomorrow = Carbon\Carbon::tomorrow('Europe/London');
echo $tomorrow .'<br><br>';                          // 2016-06-25 00:00:00
$yesterday = Carbon\Carbon::yesterday();
echo $yesterday.'<br><br>';                         // 2016-06-23 00:00:00

$yesterday = Carbon\Carbon::yesterday();
echo $yesterday->formatLocalized('%d.%b %Y').'<br><br>'; 
echo Carbon\Carbon::yesterday()->formatLocalized('%d.%b %Y').'<br><br>'; 


    //dd(User::all()->toArray());

    echo 'aktuell: '.config('app.locale_php'). '<br><br>';
    //echo print_r(config('locale.languages')). '<br><br>';
    //echo session()->get('locale')[1]. '  --- <br><br>';
    echo session()->get('locale'). '  --- session locale !! <br><br>';
    //echo $_SERVER['APP_LOCALE_PHP']. '<br><br>';
    //echo $_ENV['APP_LOCALE_PHP']. '<br><br>';


    //setlocale(LC_TIME, session()->get('locale'));
    //$d = Carbon\Carbon::parse('11/06/1990')->format('d.m.Y');
    //$d = Carbon\Carbon::parse(time())->format('d.m.Y');
    
    //$d = new Carbon(); 
    $d =   Carbon\Carbon::now();
    echo $d;
    echo '<br><br>';

    //echo get_class($carbon);                 // 'Carbon\Carbon'
    //$carbon = Carbon::now(-5);    
    //echo __line__.':  Carbon:  '.$carbon;
    //echo '<br><br>';
    //echo __line__.': formatLocalized: '. $d->formatLocalized('%d.%b %Y');


    //setlocale(LC_TIME, 'de');
    //setlocale(LC_TIME, 'de_DE'); 
    //setlocale(LC_TIME, 'German'); 
    //$d = $carbon;
    echo '<br><br>';
    echo __line__.': formatLocalized: '. $d->formatLocalized('%d.%m.%y ');

    echo '<br><br>';
    echo __line__.': formatLocalized: '. $d->formatLocalized('%d.%b %Y');



    echo '<br><br>';

    //setlocale(LC_TIME, 'German');
    //$dt = Carbon\Carbon::now();
    echo __line__.': formatLocalized: '. $d->formatLocalized('%A, %d. %B %Y');  

    echo '<br><br>';
    //echo  'LC_Time: ' . LC_TIME;
    //date_default_timezone_set('Europe/Berlin');
    //$script_tz = date_default_timezone_get();
    //echo $script_tz;


    echo phpinfo();
?>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection