<?php



/**
 * This class defines the structure of the 't_calendrier_transition_referentiel' table.
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
class CommonTCalendrierTransitionReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCalendrierTransitionReferentielTableMap';

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
        $this->setName('t_calendrier_transition_referentiel');
        $this->setPhpName('CommonTCalendrierTransitionReferentiel');
        $this->setClassname('CommonTCalendrierTransitionReferentiel');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TRANSITION_CALENDRIER_REFERENTIEL', 'IdTransitionCalendrierReferentiel', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ID_TYPE_PROCEDURE', 'IdTypeProcedure', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ORGANISME', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE', 'IdCalendrierEtapeReferentielSource', 'INTEGER', false, null, null);
        $this->addColumn('ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE', 'IdCalendrierEtapeReferentielCible', 'INTEGER', false, null, null);
        $this->addColumn('VALEUR_FIXE', 'ValeurFixe', 'INTEGER', true, null, 0);
        $this->addColumn('VALEUR_VARIABLE', 'ValeurVariable', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCalendrierTransitionReferentielTableMap
