<div>
    <x-slot name="title">Dashboard</x-slot>
    <div class="content">
        <div class="row">
            <div class="clearfix"></div>
            <div class="col-md-12 mtop30" data-container="top-12">
                <div class="widget relative" id="widget-top_stats" data-name="Quick Statistics">
                    <div class="row">
                        <div class="quick-stats-leads col-xs-12 col-md-6 col-sm-6 col-lg-4">
                            <div class="top_stats_wrapper">
                                <p class="text-uppercase mtop5"><i class="hidden-sm fa fa-tty"></i> Products<span
                                        class="pull-right">{{ $totalProduct }}</span> </p>
                                <div class="clearfix"></div>
                                <div class="progress no-margin progress-bar-mini">
                                    <div class="progress-bar progress-bar-success no-percent-text not-dynamic"
                                        role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 0%" data-percent="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
