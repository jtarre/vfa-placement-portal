<div class="row">
    @if(Auth::user()->role == "Fellow")
        @if($placementStatus->status == PlacementStatus::statuses()[2])
        	<div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-mobile"></i>Phone Interview with <a href="{{ URL::to('/companies/' . $placementStatus->opportunity->company->id) }}">{{ $placementStatus->opportunity->company->name }}</a></span></div>
        @elseif($placementStatus->status == PlacementStatus::statuses()[4])
            <div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-user"></i>On-site Interview with <a href="{{ URL::to('/companies/' . $placementStatus->opportunity->company->id) }}">{{ $placementStatus->opportunity->company->name }}</a></span></div>
        @elseif($placementStatus->status == PlacementStatus::statuses()[6])
            <div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-thumbs-up"></i>Offer Acceptance Deadline from <a href="{{ URL::to('/companies/' . $placementStatus->opportunity->company->id) }}">{{ $placementStatus->opportunity->company->name }}</a></span></div>
        @endif
    @elseif(Auth::user()->role == "Hiring Manager")
        @if($placementStatus->status == PlacementStatus::statuses()[2])
            <div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-mobile"></i>Phone Interview with <a href="{{ URL::to('/fellows/' . $placementStatus->fellow->id) }}">{{ $placementStatus->fellow->user->firstName . " " . $placementStatus->fellow->user->lastName }}</a></span></div>
        @elseif($placementStatus->status == PlacementStatus::statuses()[4])
            <div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-user"></i>On-site Interview with <a href="{{ URL::to('/fellows/' . $placementStatus->fellow->id) }}">{{ $placementStatus->fellow->user->firstName . " " . $placementStatus->fellow->user->lastName }}</a></span></div>
        @elseif($placementStatus->status == PlacementStatus::statuses()[6])
            <div class="col-md-3"><strong><span class="date"> {{ Carbon::createFromFormat('Y-m-d H:i:s', $placementStatus->eventDate)->diffForHumans() }}</span></strong></div>
            <div class="col-md-9"><span><i class="fa fa-thumbs-up"></i>Offer Acceptance Deadline for <a href="{{ URL::to('/fellows/' . $placementStatus->fellow->id) }}">{{ $placementStatus->fellow->user->firstName . " " . $placementStatus->fellow->user->lastName }}</a></span></div>
        @endif
    @endif
</div>