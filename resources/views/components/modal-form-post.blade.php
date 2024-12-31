<div class="modal fade" id="modalForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content">
            <div class="modal-body">
                <form onSubmit="return false">
                    <div id="details" class="content pt-4 pt-lg-0">
                        <h5>Category</h5>
                        <ul class="p-0 m-0">
                            @for($i = 0; $i < 5; $i++)
                                <li class="d-flex align-items-start mb-4">
                                <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-file-text ti-30px"></i></div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-1">CRM Application</h6>
                                        <small>Scales with any business</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check form-check-inline">
                                            <input name="details-radio" class="form-check-input details-radio" type="radio" value="Test{{$i}}" />
                                        </div>
                                    </div>
                                </div>
                                </li>
                                @endfor
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>