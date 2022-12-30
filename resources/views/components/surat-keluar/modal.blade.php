@foreach ($outgoingMails as $outgoingMail)
    <div class="modal fade" id="{{ $outgoingMail->id }}" tabindex="-1" aria-labelledby="Detail-Modal-Label"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="Detail-Modal-Label">Detail</h1>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="float:right"></button>
                    <div class="row">
                        <div class="col-xl-6 text-center">
                            <img src="{{ asset('storage/' . $outgoingMail->file) }}" alt="Image"
                                class="img-fluid file-image">
                        </div>
                        <div class="col-xl-6">
                            <table class="text-black">
                                <td>
                                    <p>Penginput Surat </p>
                                    <p>Tanggal Terima </p>
                                    <p>Tanggal Surat </p>
                                    <p>No Surat </p>
                                    <p>Kategori Surat </p>
                                    <p>Pengirim </p>
                                    <p>Perihal </p>
                                    <p>Keterangan </p>
                                </td>
                                <td>
                                    <p>: {{ $outgoingMail->user->name }}</p>
                                    <p>: {{ $outgoingMail->tanggal_terima }}</p>
                                    <p>: {{ $outgoingMail->tanggal_surat }}</p>
                                    <p>: {{ $outgoingMail->no_surat }}</p>
                                    <p>: {{ $outgoingMail->category->name }}</p>
                                    <p>: {{ $outgoingMail->pengirim }}</p>
                                    <p>: {{ $outgoingMail->perihal }}</p>
                                    <p>: {{ $outgoingMail->keterangan }}</p>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
