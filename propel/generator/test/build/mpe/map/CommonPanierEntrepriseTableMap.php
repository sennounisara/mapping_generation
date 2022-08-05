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
 * @package    propel.generator.mpe.map
 */
class CommonPanierEntrepriseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonPanierEntrepriseTableMap';

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
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addForeignPrimaryKey('ref_consultation', 'RefConsultation', 'INTEGER' , 'consultation', 'reference', true, null, null);
        $this->addForeignPrimaryKey('id_entreprise', 'IdEntreprise', 'INTEGER' , 'Entreprise', 'id', true, null, null);
        $this->addForeignPrimaryKey('id_inscrit', 'IdInscrit', 'INTEGER' , 'Inscrit', 'id', true, null, null);
        $this->addColumn('date_ajout', 'DateAjout', 'VARCHAR', false, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonEntreprise', 'CommonEntreprise', RelationMap::MANY_TO_ONE, array('id_entreprise' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonInscrit', 'CommonInscrit', RelationMap::MANY_TO_ONE, array('id_inscrit' => 'id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('ref_consultation' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonPanierEntrepriseTableMap
