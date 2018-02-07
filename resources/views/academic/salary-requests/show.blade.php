@extends('layouts.extended')

@section('content')
    @if(!empty($request))
        <div class="card">
            <div class="card-header black-skin white-text">
                <h4>Salary Request Details </h4>
            </div>
            <div class="card-body">
                <h4>Salary Request - {{$request->user->fname}}  {{$request->user->lname}}</h4>
                <table id="income" class="table table-light" cellspacing="0" width="90%">
                    <thead class="h3"><b>Incomes</b></thead><hr>
                    <tr>
                        <td>ඒකාබද්ද වැටුප</td>
                        <td>{{$request->consolidated_salary}}</td>
                        <td>ජිවන වියදම් දීමනාව</td>
                        <td>{{$request->cost_of_living_allowance}}</td>
                    </tr>
                    <tr>
                        <td>විදුහල්පති දීමනා</td>
                        <td>{{$request->principal_allowances}}</td>
                        <td>වෙනත් දීමනා</td>
                        <td>{{$request->other_offers}}</td>
                    </tr><tr>
                        <td>උත්සව වියදම් දීමනාව</td>
                        <td>{{$request->festival_advance}}</td>
                        <td>හිඟ වැටුප් ගෙවීම්</td>
                        <td>{{$request->arrears_of_salaries}}</td>
                    </tr>
                </table>

                <table id="income" class="table table-light" cellspacing="0" width="90%">
                    <thead class="h3"><b>Expenses</b></thead><hr>
                    <tr>
                        <td>වැ.අ.වි.වැ.</td>
                        <td>{{$request->widow_widower}}</td>
                        <td>සී.ස.අ.සේ.ස.ණ.ස</td>
                        <td>{{$request->co_operative_development_cost}}</td>
                    </tr>
                    <tr>
                        <td>උත්සව අත්තිකාරම්</td>
                        <td>{{$request->festival_cost}}</td>
                        <td>විශේෂ අත්තිකාරම්</td>
                        <td>{{$request->special_advance}}</td>
                    </tr>
                    <tr>
                        <td>ආපදා ණය වාරිකය</td>
                        <td>{{$request->distress_loan_installment}}</td>
                        <td>දේපල ණය</td>
                        <td>{{$request->property_loan}}</td>
                    </tr>
                    <tr>
                        <td>නිවාස කුළී</td>
                        <td>{{$request->houses_rent}}</td>
                        <td>විදුලි බිල්</td>
                        <td>{{$request->electricity_bills}}</td>
                    </tr>
                    <tr>
                        <td>මුද්දර ගාස්තු</td>
                        <td>{{$request->stamp_duty}}</td>
                        <td>රජයේ නිලධාරීන්ගේ යහසාධක සංගමය</td>
                        <td>{{$request->government_bonds_association}}</td>
                    </tr>
                    <tr>
                        <td>රා‍ජ්‍ය සේවක දේපළ ණය වාරිකය</td>
                        <td>{{$request->premium_rate_of_public_servants}}</td>
                        <td>වෙනත්</td>
                        <td>{{$request->insurance_premium}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a type="button" class="btn btn-blue" href="{{route('report.academic.salary-requests', ['request' => $request->id])}}">Generate Report</a>
                <button type="button" class="btn btn-success">Approve</button>
                <button type="button" class="btn btn-danger">Reject</button>
            </div>
        </div>
    @else
        <div class="alert d-block bg-danger form-error">
            <ul>
                    <li>
                        <span class="text-white">No request found with the given id</span>
                    </li>
            </ul>
        </div>
    @endif
@endsection