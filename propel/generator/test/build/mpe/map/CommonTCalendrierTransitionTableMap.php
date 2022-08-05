<?php



/**
 * This class defines the structure of the 't_calendrier_transition' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonTCalendrierTransitionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCalendrierTransitionTableMap';

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
        $this->setName('t_calendrier_transition');
        $this->setPhpName('CommonTCalendrierTransition');
        $this->setClassname('CommonTCalendrierTransition');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CALENDRIER_TRANSITION', 'IdCalendrierTransition', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_ETAPE_SOURCE', 'IdEtapeSource', 'INTEGER', 't_calendrier_etape', 'ID_CALENDRIER_ETAPE', false, null, null);
        $this->addForeignKey('ID_ETAPE_CIBLE', 'IdEtapeCible', 'INTEGER', 't_calendrier_etape', 'ID_CALENDRIER_ETAPE', false, null, null);
        $this->addColumn('VALEUR_FIXE', 'ValeurFixe', 'INTEGER', true, null, 0);
        $this->addColumn('VALEUR_VARIABLE_INITIALE', 'ValeurVariableInitiale', 'INTEGER', true, null, 0);
        $this->addColumn('VALEUR_VARIABLE_REELLE', 'ValeurVariableReelle', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCalendrierEtapeRelatedByIdEtapeSource', 'CommonTCalendrierEtape', RelationMap::MANY_TO_ONE, array('ID_ETAPE_SOURCE' => 'ID_CALENDRIER_ETAPE', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonTCalendrierEtapeRelatedByIdEtapeCible', 'CommonTCalendrierEtape', RelationMap::MANY_TO_ONE, array('ID_ETAPE_CIBLE' => 'ID_CALENDRIER_ETAPE', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonTCalendrierTransitionTableMap
