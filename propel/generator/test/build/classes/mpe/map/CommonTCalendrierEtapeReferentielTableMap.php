<?php



/**
 * This class defines the structure of the 't_calendrier_etape_referentiel' table.
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
class CommonTCalendrierEtapeReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCalendrierEtapeReferentielTableMap';

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
        $this->setName('t_calendrier_etape_referentiel');
        $this->setPhpName('CommonTCalendrierEtapeReferentiel');
        $this->setClassname('CommonTCalendrierEtapeReferentiel');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ETAPE_CALENDRIER_REFERENTIEL', 'IdEtapeCalendrierReferentiel', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ID_TYPE_PROCEDURE', 'IdTypeProcedure', 'INTEGER', true, null, 0);
        $this->addPrimaryKey('ORGANISME', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('CODE', 'Code', 'VARCHAR', false, 3, null);
        $this->addColumn('LIBELLE', 'Libelle', 'VARCHAR', false, 100, null);
        $this->addColumn('POSITION', 'Position', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCalendrierEtapeReferentielTableMap
