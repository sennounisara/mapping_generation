<?php



/**
 * This class defines the structure of the 't_CAO_Seance_Intervenant_Externe' table.
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
class CommonTCAOSeanceIntervenantExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCAOSeanceIntervenantExterneTableMap';

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
        $this->setName('t_CAO_Seance_Intervenant_Externe');
        $this->setPhpName('CommonTCAOSeanceIntervenantExterne');
        $this->setClassname('CommonTCAOSeanceIntervenantExterne');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance_intervenant_externe', 'IdSeanceIntervenantExterne', 'BIGINT', true, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'BIGINT', true, null, null);
        $this->addColumn('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ref_val_type_voix', 'IdRefValTypeVoix', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCAOSeanceIntervenantExterneTableMap
