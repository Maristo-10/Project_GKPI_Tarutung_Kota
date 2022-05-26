<div class="col-12 mt-5 p-3">
    <div class="col-12">
        <div class="row">
            @foreach ($datakejemaat as $datajemaat)
                <div class="col-12 col-md-4 d-flex mt-md-0 mb-4">
                    <div class="col-12 bg-white shadow-sm p-4 rounded">
                        <div class="col-12 d-flex">
                            <div class="col-7">
                                <span>{{ $datajemaat['name'] }}</span>
                            </div>
                            <div class="col-5 rounded  d-flex justify-content-end">
                                <div class="rounded-circle {{ $datajemaat['color'] }} d-flex align-items-center justify-content-center"
                                    style="width: 60px;height:60px;">
                                    <i class="fa fa-user text-white fs-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <span class="fs-3 fw-bold">{{ $datajemaat['jumlah'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="col-12 shadow-sm rounded mt-3 bg-white p-3">
        <div class="col-12 d-flex">
            <a class="btn btn-success p-2 ms-auto">
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
                        @foreach ($jemaats as $jemaat)
                            <tr>
                                <td style="max-width:100px;">
                                    <div class="d-flex gap-3 flex-column flex-md-row">
                                        <a data-toggle="tooltip" data-placement="bottom" title="Edit Keluarga" href="#"
                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus Keluarga" href="#"
                                            class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                                    </div>
                                </td>
                                <td>{{ $jemaat['no_kk'] }}</td>
                                <td><a href="">{{ $jemaat['nama_keluarga'] }}</a></td>
                                <td>{{ count($jemaat['jemaat']) > 0 ? $jemaat['jemaat'][0]['sektor']['nama'] : '' }}
                                </td>
                                <td>{{ $jemaat['alamat'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $jemaats->links() }}
        </div>
    </div>
</div>
