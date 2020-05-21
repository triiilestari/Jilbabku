@extends('layouts.main')
    @section('title','SISI HIJAB_KU')

    @section('container')
        <div style="text-align: center; font-family: Bookman Old Style; font-size:30px">Tambah Data Pengeluaran</div>
        <br>
        <br>
        <br>
        <div class="x_panel">
            <div class="x_title">
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="Pengeluaran.index">
                    @csrf
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Pengeluaran">Jenis Pengeluaran <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="Pengeluaran" id="Pengeluaran" class="form-control col-md-7 col-xs-12">
                            <option value="" disabled selected>Pilih pengeluaran</option>  
                            <option value="Gaji Pegawai" >Gaji Pegawai</option>
                            <option value="Tagihan Listrik" >Tagihan Listrik</option>
                            <option value="Sewa Rumah Usaha" >Sewa Rumah Usaha</option>
                            <option value="Pembelian Produk" >Pembelian Produk</option>
                            <option value="Lainnya" >Lainnya</option>                              
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Instansi">Instansi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name ="Instansi" id="Instansi" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nominal">Nominal (Rp)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Nominal" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" name="Nominal">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="/Produk.index" class="btn btn-primary">Cancel</a>
						                <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div></div>
        </div>
        
    @endsection