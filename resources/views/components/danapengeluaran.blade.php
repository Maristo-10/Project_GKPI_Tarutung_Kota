<link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
<style type="text/css">
    .my-custom-scrollbar {
position: relative;
height: 500px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>  
<div class="col-12 shadow-sm rounded mt-3 bg-white p-3">

        <div class="col-12 mt-1">
        <div class="table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered mb-0" >
                    <thead>
                        <tr>
                            <!-- <th scope="col">Pilihan</th> -->
                            <th scope="col">#</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nominal</th>
                            <!-- <th scope="col">Lampiran</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                        @foreach ($danapengeluaran as $keuangan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $keuangan -> keterangan}}</td>
                                <td>{{ $keuangan -> tanggal}}</td>
                                <td>{{ $keuangan -> nominal}}</td>
                                <!-- <td>{{ $keuangan -> lampiran}}</td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>