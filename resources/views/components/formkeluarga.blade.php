<?php
    $header_title = "Tambah Data Keluarga";
?>
<div class="col-12 p-3 bg-white shadow rounded">
    @include('components.headerform')
    {{-- TODO: Controller not ready yet --}}
    <form class="mt-3" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="no_kk">No KK</label>
                <input type="text" name="no_kk" id="no_kk" class="form-control">
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="nama_keluarga">Nama Keluarga</label>
                <input type="text" name="nama_keluarga" id="nama_keluarga" class="form-control">
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" class="form-control">
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="tanggal_nikah">Tanggal Nikah</label>
                {{-- TODO: Make date format 'YYYY-MM-DD' --}}
                <input type="date" name="tanggal_nikah" id="tanggal_nikah" class="form-control">
            </div>
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option disabled selected>Silahkan pilih status</option>
                    <option value="Atktif">Aktif</option>
                    <option value="Pindah">Pindah</option>
                    <option value="Disabled">Disabled</option>
                </select>
            </div>
            {{-- TODO: Remember this must can upload multiple file and save to db with format (fileone, filetwo, filethree) include the paht  --}}
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="lampiran">Lampiran</label>
                <input type="file" name="lampiran[]" class="form-control" id="lampiran" multiple>    
            </div>    
            <div class="form-group col-12 col-md-6 mt-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control"></textarea>
            </div>   
            <div class="col-12 col-md-6 mt-5">
                <button type="submit" class="btn btn-success">
                    Tambhakn Data Keluarga
                </button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
        
    </form>
</div>