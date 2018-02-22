<?php $__env->startSection('body-class', 'events-list events-archive tribe-events-page-template'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">All Events</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="index-2.html">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item all" href="#">Upcoming Events</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">All Events</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <section class="post tribe_events_wrapper">
                    <article class="post_content">
                        <div id="tribe-events-pg-template">
                            <div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-datepicker_format="0" data-category="">
                                <div id="tribe-events-content" class="tribe-events-single">
                                    <p class="tribe-events-back">
                                        <a href="<?php echo e(route('event')); ?>"> &laquo; All Events</a>
                                    </p>
                                    <!-- Notices -->
                                    <h1 class="tribe-events-single-event-title"><?php echo e($data->name); ?></h1>
                                    <div class="tribe-events-schedule tribe-clearfix">
                                        <h2>
                                            <span class="tribe-event-date-start"><?php echo e(date('F j, Y', strtotime($data->start_date))); ?></span>
                                            <?php if($data->end_date !== null): ?>
                                                -
                                                <span class="tribe-event-time"><?php echo e(date('F j, Y', strtotime($data->end_date))); ?></span>
                                            <?php endif; ?>
                                        </h2>
                                    </div>
                                    <div class="tribe_events type-tribe_events">
                                        <div class="tribe-events-event-image">
                                            <img src="https://docs.google.com/uc?id=<?php echo e($data->image_path); ?>" alt="" />
                                        </div>
                                        <!-- Event content -->
                                        <div class="tribe-events-single-event-description tribe-events-content">
                                            <p><?php echo e($data->description); ?></p>
                                        </div>
                                        <!-- Event meta -->
                                        <div class="tribe-events-single-section tribe-events-event-meta primary tribe-clearfix">
                                            <div class="tribe-events-meta-group tribe-events-meta-group-details">
                                                <h3 class="tribe-events-single-section-title"> Details </h3>
                                                <dl>
                                                    <dt> Date: </dt>
                                                    <dd>
                                                        <abbr class="tribe-events-abbr tribe-events-start-date dtstart" title="2017-01-31"> <?php echo e(date('F j, Y', strtotime($data->start_date))); ?>

                                                            <?php if($data->end_date !== null): ?>
                                                                - <?php echo e(date('F j, Y', strtotime($data->end_date))); ?>

                                                            <?php endif; ?></abbr>
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div class="tribe-events-meta-group tribe-events-meta-group-venue">
                                                <h3 class="tribe-events-single-section-title"> Venue </h3>
                                                <dl>
                                                    <dd class="tribe-venue"> <?php echo e($data->venue); ?></dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <!-- /Content -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>