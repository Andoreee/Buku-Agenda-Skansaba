@foreach ($incomingMails as $incomingMail)
    <div class="modal fade" id="{{ $incomingMail->id }}" tabindex="-1" aria-labelledby="Detail-Modal-Label"
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
                            <img src="{{ asset('storage/' . $incomingMail->file) }}" alt="Image"
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
                                    <p>: {{ $incomingMail->user->name }}</p>
                                    <p>: {{ $incomingMail->tanggal_terima }}</p>
                                    <p>: {{ $incomingMail->tanggal_surat }}</p>
                                    <p>: {{ $incomingMail->no_surat }}</p>
                                    <p>: {{ $incomingMail->category->name }}</p>
                                    <p>: {{ $incomingMail->pengirim }}</p>
                                    <p>: {{ $incomingMail->perihal }}</p>
                                    <p>: {{ $incomingMail->keterangan }}</p>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
