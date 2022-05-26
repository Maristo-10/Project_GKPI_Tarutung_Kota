<div class="col-12 mt-5 p-3">
    <div class="col-12">
        <div class="row">
            @foreach ($datakeluargas as $datumkeluarga)
                <div class="col-12 col-md-4 d-flex mt-md-0 mb-4">
                    <div class="col-12 bg-white shadow-sm p-4 rounded">
                        <div class="col-12 d-flex">
                            <div class="col-7">
                                <span>{{ $datumkeluarga['name'] }}</span>
                            </div>
                            <div class="col-5 rounded  d-flex justify-content-end">
                                <div class="rounded-circle {{ $datumkeluarga['color'] }} d-flex align-items-center justify-content-center"
                                    style="width: 60px;height:60px;">
                                    <i class="fa fa-user text-white fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="fs-3 fw-bold">{{ $datumkeluarga['jumlah'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-12 shadow-sm rounded mt-3 bg-white p-3">
        <div class="col-12 d-flex">
            <a href="/pendeta/data/keluarga/add"  class="btn btn-success p-2 ms-auto">
                <i class="fa fa-plus"></i>
                <span>Tambah Data Keluarga</span>
            </a>
        </div>
        <div class="col-12 mt-5">
            <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Pilihan</th>
                            <th scope="col">No KK</th>
                            <th scope="col">Nama Keluarga</th>
                            <th scope="col">Sektor</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($keluargas as $keluarga)
                            <tr>
                                <td style="max-width:100px;">
                                    <div class="d-flex gap-3 flex-column flex-md-row">
                                        <a data-toggle="tooltip" data-placement="bottom" title="Edit Keluarga" href="#"
                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus Keluarga" href="#"
                                            class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                                    </div>
                                </td>
                                <td>{{ $keluarga['no_kk'] }}</td>
                                <td><a href="/pendeta/data/keluarga/{{ $keluarga['no_kk'] }}">{{ $keluarga['nama_keluarga'] }}</a></td>
                                <td>{{ count($keluarga['jemaat']) > 0 ? $keluarga['jemaat'][0]['sektor']['nama'] : '' }}
                                </td>
                                <td>{{ $keluarga['alamat'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $keluargas->links() }}
        </div>
    </div>
</div>
