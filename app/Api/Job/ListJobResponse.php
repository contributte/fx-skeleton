<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Domain\Job\Job;
use Contributte\FrameX\Http\EntityResponse;

/**
 * @extends EntityResponse<array<int, array<string, mixed>>>
 */
class ListJobResponse extends EntityResponse
{

	/**
	 * @param Job[] $jobs
	 */
	public static function of(array $jobs): self
	{
		$self = new self();
		$self->payload = array_map(static fn (Job $job) => $job->toArray(), $jobs);

		return $self;
	}

}
