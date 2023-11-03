{{--  
 
 <!-- Modal -->
 <div class="modal fade" id="myModal-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Cast</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                
                <ul class="list-unstyled text-left">
                    <li><strong>Nama :</strong>&nbsp;{{ $value->nama }}</li>
                    <li><strong>Umur :</strong>&nbsp;{{ $value->umur }} Tahun</li>
                    <li><strong>Bio :</strong>&nbsp;{{  $value->bio }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}