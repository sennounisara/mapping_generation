<?php



/**
 * This class defines the structure of the 't_calendrier_etape' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonTCalendrierEtapeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCalendrierEtapeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('t_calendrier_etape');
        $this->setPhpName('CommonTCalendrierEtape');
        $this->setClassname('CommonTCalendrierEtape');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CALENDRIER_ETAPE', 'IdCalendrierEtape', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_CALENDRIER', 'IdCalendrier', 'INTEGER', 't_calendrier', 'ID_CALENDRIER', false, null, null);
        $this->addColumn('CODE', 'Code', 'VARCHAR', false, 3, null);
        $this->addColumn('LIBELLE', 'Libelle', 'VARCHAR', false, 100, null);
        $this->addColumn('DATE_INITIALE', 'DateInitiale', 'DATE', false, null, null);
        $this->addColumn('DATE_PREVUE', 'DatePrevue', 'DATE', false, null, null);
        $this->addColumn('POSITION', 'Position', 'INTEGER', false, null, null);
        $this->addColumn('LIBRE', 'Libre', 'BOOLEAN', true, 1, false);
        $this->addColumn('DATE_REELLE_CONFIRMEE', 'DateReelleConfirmee', 'CHAR', true, null, '0');
        $this->getColumn('DATE_REELLE_CONFIRMEE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCalendrier', 'CommonTCalendrier', RelationMap::MANY_TO_ONE, array('ID_CALENDRIER' => 'ID_CALENDRIER', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonTCalendrierTransitionRelatedByIdEtapeSource', 'CommonTCalendrierTransition', RelationMap::ONE_TO_MANY, array('ID_CALENDRIER_ETAPE' => 'ID_ETAPE_SOURCE', ), 'CASCADE', 'CASCADE', 'CommonTCalendrierTransitionsRelatedByIdEtapeSource');
        $this->addRelation('CommonTCalendrierTransitionRelatedByIdEtapeCible', 'CommonTCalendrierTransition', RelationMap::ONE_TO_MANY, array('ID_CALENDRIER_ETAPE' => 'ID_ETAPE_CIBLE', ), 'CASCADE', 'CASCADE', 'CommonTCalendrierTransitionsRelatedByIdEtapeCible');
    } // buildRelations()

} // CommonTCalendrierEtapeTableMap
