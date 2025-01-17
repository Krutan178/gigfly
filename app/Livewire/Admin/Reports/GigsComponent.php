<?php
namespace App\Livewire\Admin\Reports;

use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\ReportedGig;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class GigsComponent extends Component
{
    use WithPagination, SEOToolsTrait, Actions, LivewireAlert;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Mark new reports as seen
        ReportedGig::where('status', 'pending')->update([
            'status' => 'seen'
        ]);
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_reported_gigs'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.reports.gigs', [
            'reports' => $this->reports
        ]);
    }


    /**
     * Get list of reports
     *
     * @return object
     */
    public function getReportsProperty()
    {
        return ReportedGig::latest()->paginate(42);
    }


    /**
     * Delete report
     *
     * @param integer $id
     * @return void
     */
    public function delete($id)
    {
        // Delete report
        ReportedGig::where('id', $id)->delete();

        // Success
        $this->notification([
            'title'       => __('messages.t_success'),
            'description' => __('messages.t_report_has_been_successfully_deleted'),
            'icon'        => 'success'
        ]);
    }
    
}
