<h1 style="text-align: center;">Data Tugas</h1>
<h3 style="text-align: center;">Tanggal : {{ $tanggal }}</h3>
<h3 style="text-align: center;">Pukul : {{ $jam}}</h3>
<hr>
<table width=100%  style="border: 1px solid black; style=border-collapse: collapse;">
        <tr>
        <th width="20" style="text-align: center;">No</th>
        <th width="20" style="text-align: center;">Nama</th>
        <th width="20" style="text-align: center;">Email</th>
        <th width="20" style="text-align: center;">Tugas</th>
        <th width="20" style="text-align: center;">Tanggal Mulai</th>
        <th width="20" style="text-align: center;">Tanggal Selesai</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $tugas as $item )
        <tr>
            <td>{{ $loop->iteration}}
            </td>
            <td>{{ $item->user->nama}}</td>
            <td>{{ $item->user->email}}</td>
            <td>{{ $item->tugas}}</td>
            <td>{{ $item->tanggal_mulai}}</td>
            <td>{{ $item->tanggal_selesai}}</td>
        </tr>
        @endforeach
    </tbody>
</table>