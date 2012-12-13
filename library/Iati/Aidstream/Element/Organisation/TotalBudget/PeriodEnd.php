<?php

class Iati_Aidstream_Element_Organisation_TotalBudget_PeriodEnd extends Iati_Core_BaseElement
{
    protected $className = 'PreiodEnd';
    protected $displayName = 'Preiod End';
    protected $attribs = array('id' , '@iso_date', 'text');
    protected $iatiAttribs = array('@iso_date' , 'text');
    protected $tableName = 'iati_organisation/total_budget/period_end';
}