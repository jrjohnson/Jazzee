<?php

namespace Jazzee\CommonBundle\Hydrator;

/**
 * Custom hydrator for applicant records that creates formed arrays for the grid
 * and other displays
 */
class ApplicantDisplay extends ApplicantArray
{

    private static $applications = array();

    /**
     * Hydrate applicant records
     *
     * @param  type  $stmt
     * @param  type  $resultSetMapping
     * @param  array $hints
     * @return array
     */
    public function hydrateAll($stmt, $resultSetMapping, array $hints = array())
    {
        $result = parent::hydrateAll($stmt, $resultSetMapping, $hints);
        foreach ($result as $key => $applicant) {
            $applicationId = $applicant['application_id'];
            if (!array_key_exists($applicationId, self::$applications)) {
                self::$applications[$applicationId] = $this->_em
                    ->getRepository('JazzeeCommonBundle:Application')
                    ->find($applicationId);
            }
            $result[$key] = self::$applications[$applicationId]
                ->formatApplicantDisplayArray($applicant);
        }

        return $result;
    }
}
