<style>

</style>
<div class="modal fade" id="modal_create">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah transportir Baru</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_tambah">
                @csrf
                <div class="modal-body">
                    <x-input id='judul' label='Judul' required=true  />
                    <x-datepicker id='tanggal' label='Tanggal' required="true" />
                    <x-filepond id="foto" label="uploud Foto"  required="true" info="Format file (jpg dan png, Max 5 MB)" max="4mb"  /> 
                    <x-filepond  data-filepond-allow-reorder="true" id="file_pdf"  label='File PDF' info='( Format File PDF, Maks 5 MB)'
                        accept="application/pdf"  />

                    <input hidden  id="id" name="id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn_submit btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
