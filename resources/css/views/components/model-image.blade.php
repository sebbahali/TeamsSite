<div>
    <!-- Modal -->
    <div class="modal fade" id="showImageModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">معاينة صورة</h5>
                </div>
                <div class="modal-body">
                    <img class="w-100" style="height: 70vh" id="modelImg" src="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    {{-- <a href="" id="modleLink" class="btn btn-primary" download="">تنزيل</button> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        function showModel(src)
        {
            var myModal = new bootstrap.Modal(document.getElementById('showImageModel'), {
                keyboard: false
            });

            var modelImg = document.getElementById('modelImg');
            modelImg.src = src;

            myModal.show();
        }
    </script>
</div>