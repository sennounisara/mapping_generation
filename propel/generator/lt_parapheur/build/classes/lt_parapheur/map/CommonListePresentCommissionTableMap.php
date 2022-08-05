<?php



/**
 * This class defines the structure of the 'liste_present_commission' table.
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
class CommonListePresentCommissionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonListePresentCommissionTableMap';

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
        $this->setName('liste_present_commission');
        $this->setPhpName('CommonListePresentCommission');
        $this->setClassname('CommonListePresentCommission');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ref_consultation', 'RefConsultation', 'VARCHAR', true, 255, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('identifiant', 'Identifiant', 'VARCHAR', true, 50, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 50, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 50, null);
        $this->addColumn('date_connexion', 'DateConnexion', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonListePresentCommissionTableMap
