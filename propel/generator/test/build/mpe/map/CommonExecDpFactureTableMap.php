<?php



/**
 * This class defines the structure of the 'exec_dp_facture' table.
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
class CommonExecDpFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecDpFactureTableMap';

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
        $this->setName('exec_dp_facture');
        $this->setPhpName('CommonExecDpFacture');
        $this->setClassname('CommonExecDpFacture');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_dp', 'IdDp', 'INTEGER', 'exec_dossier_paiement', 'id', false, null, null);
        $this->addForeignKey('id_facture', 'IdFacture', 'INTEGER', 'exec_facture', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecDossierPaiement', 'CommonExecDossierPaiement', RelationMap::MANY_TO_ONE, array('id_dp' => 'id', ), null, null);
        $this->addRelation('CommonExecFacture', 'CommonExecFacture', RelationMap::MANY_TO_ONE, array('id_facture' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecDpFactureTableMap
