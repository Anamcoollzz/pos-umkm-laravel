<!-- BEGIN PAGE MODALS -->

    <!-- BEGIN MODAL -->
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-modal="true" aria-labelledby="modal-report-title" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-report-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label" for="report-name"> Name </label>

              <input type="text" id="report-name" class="form-control" name="example-text-input" placeholder="Your report name" />
            </div>

            <fieldset class="border-0 p-0 mb-3">
              <legend class="form-label float-none mb-0" style="font-size: inherit">Report type</legend>
              <div class="form-selectgroup-boxes row">
                <div class="col-lg-6">
                  <label class="form-selectgroup-item">
                    <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                      <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </span>
                      <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                        <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                      </span>
                    </span>
                  </label>
                </div>
                <div class="col-lg-6">
                  <label class="form-selectgroup-item">
                    <input type="radio" name="report-type" value="2" class="form-selectgroup-input" />
                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                      <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </span>
                      <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                        <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
            </fieldset>

            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label" for="report-url"> Report url </label>

                  <div class="input-group input-group-flat">
                    <span class="input-group-text">https://tabler.io/reports/</span>
                    <input type="text" class="form-control ps-0" value="report-01" id="report-url" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label" for="report-visibility"> Visibility </label>

                  <select id="report-visibility" class="form-select">
                    <option value="1" selected>Private</option>
                    <option value="2">Public</option>
                    <option value="3">Hidden</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label" for="report-client-name"> Client name </label>

                  <input type="text" id="report-client-name" class="form-control" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label" for="report-reporting-period"> Reporting period </label>

                  <input type="date" id="report-reporting-period" class="form-control" />
                </div>
              </div>
              <div class="col-lg-12">
                <div>
                  <label class="form-label" for="report-additional-info"> Additional information </label>

                  <textarea id="report-additional-info" class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-link link-secondary">Cancel</button>
            <button type="button" data-bs-dismiss="modal" class="btn btn-primary ms-auto">
              <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" /></svg
              >Create new report
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL -->

    <!-- END PAGE MODALS -->
