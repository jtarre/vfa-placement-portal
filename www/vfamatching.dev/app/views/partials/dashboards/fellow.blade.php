<div class="fellow-dash">
    <div class="container">
        @if(count($placementStatuses) > 0)
			<div class="upcoming-events">
					<h2><small>Upcoming Events</small></h2>
					<?php $eventCount = 0; ?>
					@foreach($placementStatuses as $placementStatus)
						@if($placementStatus->eventDate != "")
							@include('partials.indexes.upcoming-events', array('placementStatus' => $placementStatus))
							<?php $eventCount += 1; ?>
						@endif
					@endforeach
					@if($eventCount == 0)
						<p>Based on your Placement Statuses below, you have no upcoming events.</p>
					@endif
			</div>
            @include('partials.components.placementStatuses', array('placementStatuses' => $placementStatuses, 'heading'=>"Your Placement Progress"))
        @else
            <div class="row">
                <div class="col-xs-12">
                    <h4>Welcome to the Fellow Dashboard!</h4>
                    <p>This is were you'll find your upcoming events and progress with each Opportunity you're interested in. But you haven't been introduced to any companies yet... <p>
                    <p>Head on over to the list of Opportunities and start pitching! Your pitches will be reviewed by VFA Staff, and you'll receive an email when they're approved.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="pull-right">
                        <a href="{{ URL::route('opportunities.index') }}" class="btn btn-primary">View Opportunities</a>
                    </div>
                </div>
            </div>
        @endif
        <!-- Pitch Invites -->
        @include("partials.indexes.pitchInvites", array("fellow" => Auth::user()->profile))
    </div><!-- End Container -->
</div><!-- End fellow dashboard -->
