<h1 style="text-align: center;">Data User</h1>
<h3 style="text-align: center;">Tanggal : {{ $tanggal }}</h3>
<h3 style="text-align: center;">Pukul : {{ $jam}}</h3>
<hr>
<table width=100%  style="border: 1px solid black; style=border-collapse: collapse;">
        <tr>
        <th width="20" style="text-align: center;">No</th>
        <th width="20" style="text-align: center;">Nama</th>
        <th width="20" style="text-align: center;">Email</th>
        <th width="20" style="text-align: center;">Jabatan</th>
        <th width="20" style="text-align: center;">Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $user as $item )
        <tr>
            <td>{{ $loop->iteration}}
            </td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->jabatan}}</td>
            @if ($item->is_tugas == false)
                <td>Belum Ditugaskan</td>
            @else
                <td>Sudah Ditugaskan</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>