<?php



/**
 * This class defines the structure of the 'caution_provisoire' table.
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
class CommonCautionProvisoireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCautionProvisoireTableMap';

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
        $this->setName('caution_provisoire');
        $this->setPhpName('CommonCautionProvisoire');
        $this->setClassname('CommonCautionProvisoire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('caution_ref', 'CautionRef', 'VARCHAR', true, 30, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, null);
        $this->addColumn('montant', 'Montant', 'DOUBLE', true, null, null);
        $this->addColumn('montant_devise', 'MontantDevise', 'DOUBLE', false, null, null);
        $this->addColumn('devise', 'Devise', 'VARCHAR', false, 30, null);
        $this->addColumn('entreprise', 'Entreprise', 'VARCHAR', true, 30, null);
        $this->addColumn('id_banque', 'IdBanque', 'INTEGER', true, null, null);
        $this->addColumn('id_blob_pj', 'IdBlobPj', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCautionProvisoireTableMap
