<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>TES - Venturo Camp Tahap 2</title> --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            td,
            th {
                font-size: 11px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid my-5">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0">
                        Venturo - Laporan penjualan tahunan per menu
                    </h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <select id="my-select" class="form-control" name="tahun">
                                        <option value="">Pilih Tahun</option>
                                        @foreach ($tahun as $key => $item)
                                            <option value="{{ $key }}" {{ request('tahun') == $key ? 'selected="true"' : '' }}>{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">
                                    Tampilkan
                                </button>
                                @if (request('tahun'))
                                    <a href="{{ url('/api/menu') }}" target="_blank" rel="Array Menu"
                                        class="btn btn-secondary">
                                        Json Menu
                                    </a>
                                    <a href="{{ url('/api/transaksi') }}?tahun={{ request('tahun') }}" target="_blank"
                                        rel="Array Transaksi" class="btn btn-secondary">
                                        Json Transaksi
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    @if (request('tahun'))
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" style="margin: 0;">
                                <thead>
                                    <tr class="table-dark">
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu
                                        </th>
                                        <th colspan="12" style="text-align: center;">Periode Pada {{ request('tahun') }}
                                        </th>
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total
                                        </th>
                                    </tr>
                                    <tr class="table-dark">
                                        <th style="text-align: center;width: 75px;">Jan</th>
                                        <th style="text-align: center;width: 75px;">Feb</th>
                                        <th style="text-align: center;width: 75px;">Mar</th>
                                        <th style="text-align: center;width: 75px;">Apr</th>
                                        <th style="text-align: center;width: 75px;">Mei</th>
                                        <th style="text-align: center;width: 75px;">Jun</th>
                                        <th style="text-align: center;width: 75px;">Jul</th>
                                        <th style="text-align: center;width: 75px;">Ags</th>
                                        <th style="text-align: center;width: 75px;">Sep</th>
                                        <th style="text-align: center;width: 75px;">Okt</th>
                                        <th style="text-align: center;width: 75px;">Nov</th>
                                        <th style="text-align: center;width: 75px;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $jumlah_januari = 0;
                                        $jumlah_februari = 0;
                                        $jumlah_maret = 0;
                                        $jumlah_april = 0;
                                        $jumlah_mei = 0;
                                        $jumlah_juni = 0;
                                        $jumlah_juli = 0;
                                        $jumlah_agustus = 0;
                                        $jumlah_september = 0;
                                        $jumlah_oktober = 0;
                                        $jumlah_november = 0;
                                        $jumlah_desember = 0;
                                    @endphp
                                    @foreach ($menu as $key => $item)
                                        <tr>
                                            <td class="table-secondary" colspan="14"><b>{{ Str::ucfirst($item[$key]->kategori->nama) }}</b></td>
                                        </tr>
                                        @foreach ($item as $value)
                                            <tr>
                                                <td>{{ $value->menu }}</td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '01')->whereYear('tanggal', request('tahun'))->get();
                                                        $januari = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $januari += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_januari += $januari;
                                                    @endphp
                                                    {{ substr(number_format($januari, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '02')->whereYear('tanggal', request('tahun'))->get();
                                                        $februari = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $februari += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_februari += $februari;
                                                    @endphp
                                                    {{ substr(number_format($februari, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '03')->whereYear('tanggal', request('tahun'))->get();
                                                        $maret = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $maret += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_maret += $maret;
                                                    @endphp
                                                    {{ substr(number_format($maret, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '04')->whereYear('tanggal', request('tahun'))->get();
                                                        $april = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $april += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_april += $april;
                                                    @endphp
                                                    {{ substr(number_format($april, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '05')->whereYear('tanggal', request('tahun'))->get();
                                                        $mei = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $mei += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_mei += $mei;
                                                    @endphp
                                                    {{ substr(number_format($mei, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '06')->whereYear('tanggal', request('tahun'))->get();
                                                        $juni = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $juni += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_juni += $juni;
                                                    @endphp
                                                    {{ substr(number_format($juni, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '07')->whereYear('tanggal', request('tahun'))->get();
                                                        $juli = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $juli += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_juli += $juli;
                                                    @endphp
                                                    {{ substr(number_format($juli, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '08')->whereYear('tanggal', request('tahun'))->get();
                                                        $agustus = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $agustus += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_agustus += $agustus;
                                                    @endphp
                                                    {{ substr(number_format($agustus, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '09')->whereYear('tanggal', request('tahun'))->get();
                                                        $september = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $september += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_september += $september;
                                                    @endphp
                                                    {{ substr(number_format($september, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '10')->whereYear('tanggal', request('tahun'))->get();
                                                        $oktober = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $oktober += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_oktober += $oktober;
                                                    @endphp
                                                    {{ substr(number_format($oktober, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '11')->whereYear('tanggal', request('tahun'))->get();
                                                        $november = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $november += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_november += $november;
                                                    @endphp
                                                    {{ substr(number_format($november, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;">
                                                    @php
                                                        $transaksi = App\Models\Transaksi::where('menu_id',$value->id)->whereMonth('tanggal', '12')->whereYear('tanggal', request('tahun'))->get();
                                                        $desember = 0;
                                                        foreach ($transaksi as $tr) {
                                                            $desember += $value->harga * $tr->jumlah;
                                                        }
                                                        $jumlah_desember += $desember;
                                                    @endphp
                                                    {{ substr(number_format($desember, 2, ',','.'),0,-3) }}
                                                </td>
                                                <td style="text-align: right;"><b>{{ substr(number_format($januari + $februari + $maret + $april + $mei + $juni + $juli + $agustus + $september + $oktober + $november + $desember, 2, ',','.'),0,-3) }}</b></td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    <tr class="table-dark">
                                        <td><b>Total</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_januari, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_februari, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_maret, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_april, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_mei, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_juni, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_juli, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_agustus, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_september, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_oktober, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_november, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_desember, 2, ',','.'),0,-3) }}</b></td>
                                        <td style="text-align: right;"><b>{{ substr(number_format($jumlah_januari + $jumlah_februari + $jumlah_maret + $jumlah_april + $jumlah_mei + $jumlah_juni + $jumlah_juli + $jumlah_agustus + $jumlah_september + $jumlah_oktober + $jumlah_november + $jumlah_desember, 2, ',','.'),0,-3) }}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
