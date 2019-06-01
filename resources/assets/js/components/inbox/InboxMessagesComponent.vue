<template>

        <div class="email-list h-100 layers">
            <div class="layer w-100">
                <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw">
                    <div class="peer">
                        <div class="btn-group" role="group">
                            <button type="button"
                                    class="email-side-toggle d-n@md+ btn bgc-white bdrs-2 mR-3 cur-p">
                                <i class="ti-menu"></i></button>
                            <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i
                                    class="ti-folder"></i></button>
                            <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i
                                    class="ti-tag"></i></button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button"
                                        class="btn cur-p bgc-white no-after dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="ti-more-alt"></i></button>
                                <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                                    <li><a href=""
                                           class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i
                                            class="ti-trash mR-10"></i> <span>Delete</span></a></li>
                                    <li><a href=""
                                           class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i
                                            class="ti-alert mR-10"></i>
                                        <span>Mark as Spam</span></a></li>
                                    <li><a href=""
                                           class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i
                                            class="ti-star mR-10"></i> <span>Star</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="peer">
                        <div class="btn-group" role="group">
                            <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i
                                    class="ti-angle-left"></i></button>
                            <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i
                                    class="ti-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer w-100">
                <div class="bdT bdB"><input type="text" class="form-control m-0 bdw-0 pY-15 pX-20"
                                            placeholder="Search..."></div>
            </div>
            <div class="layer w-100 fxg-1 scrollable pos-r">
                <div class="">
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                    <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                        <div class="peer mR-10">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                    type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                    class="peer"> <label for="inputCall1"
                                                         class="peers peer-greed js-sb ai-c"></label>
                            </div>
                        </div>
                        <div class="peer peer-greed ov-h">
                            <div class="peers ai-c">
                                <div class="peer peer-greed"><h6>John Doe</h6></div>
                                <div class="peer">
                                    <small>1 min ago</small>
                                </div>
                            </div>
                            <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span
                                class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        name: "InboxMessagesComponent"
    }
</script>

<style scoped>

</style>