<?php



/**
 * This class defines the structure of the 'ModeleFormulaire' table.
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
class CommonModeleFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonModeleFormulaireTableMap';

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
        $this->setName('ModeleFormulaire');
        $this->setPhpName('CommonModeleFormulaire');
        $this->setClassname('CommonModeleFormulaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('reference', 'Reference', 'VARCHAR', true, 255, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 30, null);
        $this->addColumn('type_formulaire', 'TypeFormulaire', 'INTEGER', true, 1, null);
        $this->addColumn('id_type_procedure', 'IdTypeProcedure', 'INTEGER', false, 1, null);
        $this->addColumn('id_categorie', 'IdCategorie', 'INTEGER', false, 10, null);
        $this->addColumn('code_cpv_1', 'CodeCpv1', 'VARCHAR', false, 8, null);
        $this->addColumn('code_cpv_2', 'CodeCpv2', 'VARCHAR', false, 255, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', false, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, '0000-00-00 00:00:00');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonModeleFormulaireTableMap
