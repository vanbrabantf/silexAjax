<?php
namespace Vanbrabantf\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class SearchController
{
    private $twig;
    private $officeRepository;

    /**
     * SearchController constructor.
     * @param $twig
     * @param \Vanbrabantf\Offices\OfficeRepositoryInterface $officeRepository
     */
    public function __construct($twig, $officeRepository)
    {
        $this->twig = $twig;
        $this->officeRepository = $officeRepository;
    }

    public function indexAction()
    {
        return $this->twig->render('index.html');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function findAction(Request $request)
    {
        $search = $request->request->all();
        $offices = $this->officeRepository->getOfficesByLocation(
            $search['location'],
            $search['weekends'],
            $search['support'],
            $search['strict']
        );

        return $offices;
    }
}
