<?php



/**
 * This class defines the structure of the 'Certificats_Entreprises' table.
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
class CommonCertificatsEntreprisesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCertificatsEntreprisesTableMap';

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
        $this->setName('Certificats_Entreprises');
        $this->setPhpName('CommonCertificatsEntreprises');
        $this->setClassname('CommonCertificatsEntreprises');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addColumn('certificat', 'Certificat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('date_debut', 'DateDebut', 'VARCHAR', true, 20, null);
        $this->addColumn('date_fin', 'DateFin', 'VARCHAR', true, 20, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, 20, null);
        $this->addColumn('nom_inscrit', 'NomInscrit', 'VARCHAR', true, 200, null);
        $this->addColumn('prenom_inscrit', 'PrenomInscrit', 'VARCHAR', true, 200, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, 20, null);
        $this->addColumn('statut_revoque', 'StatutRevoque', 'VARCHAR', true, 20, null);
        $this->addColumn('date_revoquation', 'DateRevoquation', 'VARCHAR', true, 20, null);
        $this->addColumn('mail_inscrit', 'MailInscrit', 'VARCHAR', true, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCertificatsEntreprisesTableMap
