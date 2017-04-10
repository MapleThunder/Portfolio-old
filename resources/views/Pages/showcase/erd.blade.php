@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div id="pdf-holder">

                </div>
            </div>
        </div>
    </div>

    <script src="/js/pdfobject.js"></script>
    <script>PDFObject.embed("/img/portfolio/NsccApplication/NSCC_Application_Form_ERD.pdf", "#pdf-holder");</script>

@endsection