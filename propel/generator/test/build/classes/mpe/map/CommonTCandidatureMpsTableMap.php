<?php



/**
 * This class defines the structure of the 't_candidature_mps' table.
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
class CommonTCandidatureMpsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCandidatureMpsTableMap';

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
        $this->setName('t_candidature_mps');
        $this->setPhpName('CommonTCandidatureMps');
        $this->setClassname('CommonTCandidatureMps');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_candidature', 'IdCandidature', 'INTEGER', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('ref_consultation', 'RefConsultation', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', false, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusted_date', 'UntrustedDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('untrusted_serial', 'UntrustedSerial', 'VARCHAR', true, 40, null);
        $this->addColumn('taille_fichier', 'TailleFichier', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCandidatureMpsTableMap
