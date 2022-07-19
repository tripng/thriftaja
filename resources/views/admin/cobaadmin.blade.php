@extends('admin.index')
@section('content')

    <button style="height: 40px;" onclick="bokuModalsa()">Hapus</button>

    <div class="bokuModal shadow bg-light" style="display: none;">
        <h3 class="text-center" style="margin-top: 70px;">Apakah Anda Yakin Ingin Menghapus?</h3>
        <div class="bokuConfirm d-flex justify-content-center">
            <button type="button" class="btn bg-danger shadow text-light m-3">Iya</button> 
            <button type="button" class="btn bg-info shadow m-3" onclick="bokuModalExit()">Tidak</button>
        </div>
    </div>

    <script>
        const bokuModal = document.querySelector('.bokuModal')
        function bokuModalsa(){
            bokuModal.style.display = 'block' 
        }
        function bokuModalExit(){
           bokuModal.style.display = 'none' 
        }
    </script>
@endsection