<?php



/**
 * This class defines the structure of the 'membre_commission_consultation' table.
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
class CommonMembreCommissionConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonMembreCommissionConsultationTableMap';

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
        $this->setName('membre_commission_consultation');
        $this->setPhpName('CommonMembreCommissionConsultation');
        $this->setClassname('CommonMembreCommissionConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_membre', 'IdMembre', 'INTEGER', true, null, null);
        $this->addColumn('qualite', 'Qualite', 'VARCHAR', true, 200, null);
        $this->addColumn('id_commission', 'IdCommission', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonMembreCommissionConsultationTableMap
