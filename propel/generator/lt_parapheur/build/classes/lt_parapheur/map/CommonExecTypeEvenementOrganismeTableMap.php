<?php



/**
 * This class defines the structure of the 'exec_type_evenement_organisme' table.
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
class CommonExecTypeEvenementOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecTypeEvenementOrganismeTableMap';

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
        $this->setName('exec_type_evenement_organisme');
        $this->setPhpName('CommonExecTypeEvenementOrganisme');
        $this->setClassname('CommonExecTypeEvenementOrganisme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('id_type_evenement', 'IdTypeEvenement', 'INTEGER' , 'exec_type_evenement', 'id', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('habilitation', 'Habilitation', 'LONGVARCHAR', true, null, null);
        $this->addColumn('via_demande', 'ViaDemande', 'TINYINT', true, null, null);
        $this->addColumn('id_theme', 'IdTheme', 'INTEGER', true, null, null);
        $this->addColumn('id_modele_document', 'IdModeleDocument', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecTypeEvenement', 'CommonExecTypeEvenement', RelationMap::MANY_TO_ONE, array('id_type_evenement' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecTypeEvenementOrganismeTableMap
