<div id="theme-customization"
    class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0 transition-all duration-300 transform max-w-[260px] w-full z-50 bg-white dark:bg-gray-800"
    tabindex="-1">
    <div class="h-16 bg-primary text-white flex items-center px-6 gap-3">
        <h5 class="text-base grow">Theme Customizer</h5>
        <button type="button" class="h-6 w-6 flex items-center justify-center rounded-full bg-dark text-white"
            data-fc-dismiss>
            <i class="mdi mdi-close text-sm"></i>
        </button>
    </div>

    <div class="h-[calc(100vh-64px)]" data-simplebar>
        <div class="p-6">
            <div class="py-3 px-5 border border-warning/25 bg-warning/20 text-warning rounded mb-6" role="alert">
                <span class="font-medium">Customize </span> the overall color
                scheme, Layout, etc.
            </div>

            <div class="mb-4">
                <h5 class="font-semibold text-sm mb-3">Color Scheme</h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode"
                            id="layout-color-light" value="light" />
                        <label class="ms-2" for="layout-color-light">Light</label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode"
                            id="layout-color-dark" value="dark" />
                        <label class="ms-2" for="layout-color-dark"> Dark </label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="font-semibold text-sm mb-3">Direction</h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                            id="direction-ltr" value="ltr" />
                        <label class="ms-2" for="direction-ltr"> LTR </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                            id="direction-rtl" value="rtl" />
                        <label class="ms-2" for="direction-rtl"> RTL </label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="font-semibold text-sm mb-3">
                    Layout Position (Menu and Topbar)
                </h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-layout-position" id="layout-position-fixed" value="fixed" />
                        <label class="ms-2" for="layout-position-fixed">
                            Fixed
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-layout-position" id="layout-position-scrollable" value="scrollable" />
                        <label class="ms-2" for="layout-position-scrollable">
                            Scrollable
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-4 2xl:block hidden">
                <h5 class="font-semibold text-sm mb-3">Width</h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-width"
                            id="layout-mode-default" value="default" />
                        <label class="ms-2" for="layout-mode-default"> Fluid </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-layout-width"
                            id="layout-mode-boxed" value="boxed" />
                        <label class="ms-2" for="layout-mode-boxed"> Boxed </label>
                    </div>
                </div>
            </div>

            <div class="mb-4" id="leftSidebarSize">
                <h5 class="font-semibold text-sm mb-3">Left Sidebar Size</h5>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-sidenav-view"
                            id="sidenav-view-default" value="default" />
                        <label class="ms-2" for="sidenav-view-default">
                            Default
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-sidenav-view" id="sidenav-view-condensed" value="condensed" />
                        <label class="ms-2" for="sidenav-view-condensed">
                            Condensed (Small)
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-sidenav-view" id="sidenav-view-compact" value="compact" />
                        <label class="ms-2" for="sidenav-view-compact">
                            Compact
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-sidenav-view" id="sidenav-view-mobile" value="mobile" />
                        <label class="ms-2" for="sidenav-view-mobile"> Mobile </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-sidenav-view" id="sidenav-view-hidden" value="hidden" />
                        <label class="ms-2" for="sidenav-view-hidden">Hidden </label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color"
                            id="menu-color-light" value="light" />
                        <label class="ms-2" for="menu-color-light"> Light </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color"
                            id="menu-color-dark" value="dark" />
                        <label class="ms-2" for="menu-color-dark"> Dark </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color"
                            id="menu-color-brand" value="brand" />
                        <label class="ms-2" for="menu-color-brand"> Brand </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-menu-color"
                            id="menu-color-gradient" value="gradient" />
                        <label class="ms-2" for="menu-color-gradient">
                            Gradient
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-topbar-color" id="topbar-color-light" value="light" />
                        <label class="ms-2" for="topbar-color-light"> Light </label>
                    </div>

                    <div class="flex items-center">
                        <input class="form-switch form-switch-sm text-primary" type="checkbox"
                            name="data-topbar-color" id="topbar-color-dark" value="dark" />
                        <label class="ms-2" for="topbar-color-dark"> Dark </label>
                    </div>
                </div>
            </div>

            <div>
                <button type="button" class="btn bg-primary text-white w-full" id="reset-layout">
                    Reset
                </button>
            </div>
        </div>
    </div>
</div>
