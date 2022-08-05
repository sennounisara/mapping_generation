<?php



/**
 * This class defines the structure of the 'Panier_Entreprise' table.
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
class CommonPanierEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonPanierEntrepriseTableMap';

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
        $this->setName('Panier_Entreprise');
        $this->setPhpName('CommonPanierEntreprise');
        $this->setClassname('CommonPanierEntreprise');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignPrimaryKey('ref_consultation', 'RefConsultation', 'INTEGER' , 'consultation', 'reference', true, null, null);
        $this->addPrimaryKey('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addPrimaryKey('id_inscrit', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('date_ajout', 'DateAjout', 'VARCHAR', false, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('ref_consultation' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonPanierEntrepriseTableMap
