@extends('main.admin.main')

@section('content')
<div class="p-4">
    <div id="grafik"></div>
</div>
{{-- cdn highcharts --}}
<script src="https://code.highcharts.com/highcharts.js"></script> 
<script type="text/javascript">

    var total_pendapatan = {{ Js::from($total_pendapatan) }}; 
    var bulan = {{ Js::from($bulan) }}; 
    Highcharts.chart('grafik', {
        title: {
            text: 'Grafik Pendapatan Bulanan'
        },
        xAxis: {
            categories: bulan
        },
        yAxis: {
            title: {
                text: 'Nominal Pendapatan Bulanan'
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nominal Pendapatan',
            data: total_pendapatan
        }]
    });
</script>
@endsection


