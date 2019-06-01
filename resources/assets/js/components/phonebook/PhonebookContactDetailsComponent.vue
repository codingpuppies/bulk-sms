<template>
    <div class="email-content h-100">
        <div class="h-100 scrollable pos-r">
            <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw d-n@md+">
                <div class="peer">
                    <div class="btn-group" role="group">
                        <button type="button"
                                class="back-to-mailbox btn bgc-white bdrs-2 mR-3 cur-p"><i
                                class="ti-angle-left"></i></button>
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
            <div class="email-content-wrapper">
                <div class="peers ai-c jc-sb pX-40 pY-30">
                    <div class="peers peer-greed">
                        <div class="peer mR-20"><img class="bdrs-50p w-3r h-3r" alt=""
                                                     src="https://randomuser.me/api/portraits/men/11.jpg">
                        </div>
                        <div class="peer">
                            <small>Nov, 02 2017</small>
                            <h5 class="c-grey-900 mB-5">John Doe</h5>
                            <!--<span>To: email@gmail.com</span>-->
                        </div>
                    </div>
                    <div class="peer"><a href="" class="btn btn-danger bdrs-50p p-15 lh-0"><i
                            class="fa fa-comment"></i></a></div>
                </div>
                <div class="bdT pX-40 pY-30"><h4>Title of this email goes here</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam</p></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PhonebookContactDetailsComponent"
    }
</script>

<style scoped>

</style>