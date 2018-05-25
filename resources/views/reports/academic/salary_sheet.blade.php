<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        td { font-family:  sumadura; }
        h2 { font-family:  sumadura; }
        h4 { font-family:  sumadura; }
        .text-center{text-align:center!important}

    </style>
</head>
<body>

<div class="row">
    <?php $image_path = '/img/dslogo2.png'; ?>
    <div style="text-align: center">
        <img class="text-center" src="{{ public_path() . $image_path }}" width="128px" height="128px">
    </div>
    <h2 class="text-center">ã’tia’fiakdkdhl úoHd,h</h2>
    <span class="text-center"><h4>.=re jegqma jd¾;dj</h4></span>
</div>
<div style="margin-left: 1em">
    <h2><b>wdohï ^re’&</b></h2><hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th align="left" width="250px"> </th>
            <th align="left" width="250px"> </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>taldnoao jegqm</td>
            <td>{{$request->consolidated_salary}}</td>
        </tr>
        <tr>
            <td>Ôjk úhoï §ukdj</td>
            <td>{{$request->cost_of_living_allowance}}</td>
        </tr>
        <tr>
            <td>ysÕ jegqma f.ùï</td>
            <td>{{$request->arrears_of_salaries}}</td>
        </tr>
        <tr>
            <td>úÿy,am;s §ukd</td>
            <td>{{$request->principal_allowances}}</td>
        </tr>
        <tr>
            <td>fjk;a §ukd</td>
            <td>{{$request->other_offers}}</td>
        </tr>
        <tr>
            <td>W;aij úhoï §ukd</td>
            <td>{{$request->festival_advance}}</td>
        </tr>
        </tbody>
    </table>
</div>

<div style="margin-left: 1em;">
    <h2><b>úhoï ^re’&</b></h2><hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th align="left" width="250px"> </th>
            <th align="left" width="250px"> </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>je’w’ú’je’</td>
            <td>{{$request->widow_widower}}</td>
        </tr>
        <tr>
            <td>iS’i’w’fia’i’K’i</td>
            <td>{{$request->co_operative_development_cost}}</td>
        </tr>
        <tr>
            <td>W;aij w;a;sldrï	</td>
            <td>{{$request->festival_cost}}</td>
        </tr>
        <tr>
            <td>úfYaI w;a;sldrï</td>
            <td>{{$request->special_advance}}</td>
        </tr>
        <tr>
            <td>wdmod Kh jdßlh</td>
            <td>{{$request->distress_loan_installment}}</td>
        </tr>
        <tr>
            <td>foam, Kh</td>
            <td>{{$request->property_loan}}</td>
        </tr>
        <tr>
            <td>ksjdi l=&lt;S</td>
            <td>{{$request->houses_rent}}</td>
        </tr>
        <tr>
            <td>úÿ,s ì,a</td>
            <td>{{$request->electricity_bills}}</td>
        </tr>
        <tr>
            <td>uqoaor .dia;=</td>
            <td>{{$request->stamp_duty}}</td>
        </tr>
        <tr>
            <td>rcfha ks,OdÍkaf.a hyidOl ix.uh</td>
            <td>{{$request->government_bonds_association}}</td>
        </tr>
        <tr>
            <td>rcfha fiajl foam&lt; Kh jdßlh</td>
            <td>{{$request->premium_rate_of_public_servants}}</td>
        </tr>
        <tr>
            <td>fjk;a</td>
            <td>{{$request->insurance_premium}}</td>
    </table>
</div>
</body>
</html>