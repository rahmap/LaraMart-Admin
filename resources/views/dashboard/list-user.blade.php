@extends('layouts.dashboard')

@section('title', 'Welcome')

@section('outCSS')
{{-- CSS Tambahan --}} {{-- {{ asset('apaxy/...') }} --}}
<!-- DataTables -->
<link href="{{ asset('apaxy/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />
<link href="{{ asset('apaxy/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('apaxy/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
  type="text/css" />
@endsection

@section('pageName', 'List Users')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ url('/') }}">Lara Mart</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">Data User</a></li>
<li class="breadcrumb-item active">List User</li>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <h4 class="header-title">Data User</h4>
        <p class="card-title-desc">Menampilkan data pelanggan pada Toko LaraMart.
        </p>

        <table id="datatable" class="table table-bordered dt-responsive nowrap"
          style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Zenaida Frank</td>
              <td>Software Engineer</td>
              <td>New York</td>
              <td>63</td>
              <td>2010/01/04</td>
              <td>$125,250</td>
            </tr>
            <tr>
              <td>Zorita Serrano</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>56</td>
              <td>2012/06/01</td>
              <td>$115,000</td>
            </tr>
            <tr>
              <td>Jennifer Acosta</td>
              <td>Junior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>43</td>
              <td>2013/02/01</td>
              <td>$75,650</td>
            </tr>
            <tr>
              <td>Cara Stevens</td>
              <td>Sales Assistant</td>
              <td>New York</td>
              <td>46</td>
              <td>2011/12/06</td>
              <td>$145,600</td>
            </tr>
            <tr>
              <td>Hermione Butler</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011/03/21</td>
              <td>$356,250</td>
            </tr>
            <tr>
              <td>Lael Greer</td>
              <td>Systems Administrator</td>
              <td>London</td>
              <td>21</td>
              <td>2009/02/27</td>
              <td>$103,500</td>
            </tr>
            <tr>
              <td>Jonas Alexander</td>
              <td>Developer</td>
              <td>San Francisco</td>
              <td>30</td>
              <td>2010/07/14</td>
              <td>$86,500</td>
            </tr>
            <tr>
              <td>Shad Decker</td>
              <td>Regional Director</td>
              <td>Edinburgh</td>
              <td>51</td>
              <td>2008/11/13</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Michael Bruce</td>
              <td>Javascript Developer</td>
              <td>Singapore</td>
              <td>29</td>
              <td>2011/06/27</td>
              <td>$183,000</td>
            </tr>
            <tr>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011/01/25</td>
              <td>$112,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('outJS')
{{-- JS Tambahan --}} {{-- {{ asset('apaxy/...') }} --}}

<!-- Required datatable js -->
<script src="{{ asset('apaxy/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('apaxy/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('apaxy/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('apaxy/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('apaxy/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('apaxy/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ asset('apaxy/libs/jszip/jszip.min.js') }}"></script> --}}
{{-- <script src="{{ asset('apaxy/libs/pdfmake/build/pdfmake.min.js') }}"></script> --}}
{{-- <script src="{{ asset('apaxy/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
{{-- <script src="{{ asset('apaxy/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script> --}}
{{-- <script src="{{ asset('apaxy/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script> --}}
{{-- <script src="{{ asset('apaxy/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script> --}}
<!-- Datatable init js -->
<script src="{{ asset('apaxy/js/pages/datatables.init.js') }}"></script>
@endsection