<?php



/**
 * This class defines the structure of the 'T_Traduction_Tmp' table.
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
class CommonTTraductionTmpTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTTraductionTmpTableMap';

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
        $this->setName('T_Traduction_Tmp');
        $this->setPhpName('CommonTTraductionTmp');
        $this->setClassname('CommonTTraductionTmp');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('langue', 'Langue', 'VARCHAR', true, 2, null);
        $this->addPrimaryKey('id_libelle', 'IdLibelle', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('champ', 'Champ', 'LONGVARCHAR', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('reference', 'Reference', 'INTEGER', false, null, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', false, null, null);
        $this->addColumn('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTTraductionTmpTableMap
