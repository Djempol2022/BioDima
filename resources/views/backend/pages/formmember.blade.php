@extends('backend.layouts.index')

@section('konten')
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Unik</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Paket Pembelian</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Provinsi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kota</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Pemesanan</th>
                      <th class="text-secondary opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($form_member as $form_member)
                    <tr>
                      <td class="align-middle text-center text-sm">
                      {{$form_member->kodeunik}}
                      </td>
                      <td class="align-middle text-center text-sm">
                      {{$form_member->nama}}
                      </td>
                      <td class="align-middle text-center text-sm">
                      {{$form_member->RelasiPaket->namapak}}
                      </td>
                      <td class="align-middle text-center text-sm">
                      {{$form_member->provinsi}}
                      </td>
                      <td class="align-middle text-center text-sm">
                      {{$form_member->kota}}
                      </td>
                      <td class="align-middle text-center">
                      {{$form_member->status_pemesanan}}
                      </td>
                   
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Detail
                        </a>
                      </td>
                    </tr>
                    @endforeach
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    @endsection