<?php


/**
 * Base class that represents a query for the 't_document_collaboratif' table.
 *
 * 
 *
 * @method CommonTDocumentCollaboratifQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonTDocumentCollaboratifQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonTDocumentCollaboratifQuery orderByIdThemeParapheur($order = Criteria::ASC) Order by the id_theme_parapheur column
 * @method CommonTDocumentCollaboratifQuery orderByIdObjet($order = Criteria::ASC) Order by the id_objet column
 * @method CommonTDocumentCollaboratifQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTDocumentCollaboratifQuery orderByTitreDocument($order = Criteria::ASC) Order by the titre_document column
 * @method CommonTDocumentCollaboratifQuery orderByTypeDocument($order = Criteria::ASC) Order by the type_document column
 * @method CommonTDocumentCollaboratifQuery orderByTypeObjet($order = Criteria::ASC) Order by the type_objet column
 * @method CommonTDocumentCollaboratifQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonTDocumentCollaboratifQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTDocumentCollaboratifQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonTDocumentCollaboratifQuery orderByIdCreateur($order = Criteria::ASC) Order by the id_createur column
 * @method CommonTDocumentCollaboratifQuery orderByNomCreateur($order = Criteria::ASC) Order by the nom_createur column
 * @method CommonTDocumentCollaboratifQuery orderByPrenomCreateur($order = Criteria::ASC) Order by the prenom_createur column
 *
 * @method CommonTDocumentCollaboratifQuery groupByIdDocument() Group by the id_document column
 * @method CommonTDocumentCollaboratifQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonTDocumentCollaboratifQuery groupByIdThemeParapheur() Group by the id_theme_parapheur column
 * @method CommonTDocumentCollaboratifQuery groupByIdObjet() Group by the id_objet column
 * @method CommonTDocumentCollaboratifQuery groupByOrganisme() Group by the organisme column
 * @method CommonTDocumentCollaboratifQuery groupByTitreDocument() Group by the titre_document column
 * @method CommonTDocumentCollaboratifQuery groupByTypeDocument() Group by the type_document column
 * @method CommonTDocumentCollaboratifQuery groupByTypeObjet() Group by the type_objet column
 * @method CommonTDocumentCollaboratifQuery groupByStatut() Group by the statut column
 * @method CommonTDocumentCollaboratifQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTDocumentCollaboratifQuery groupByDateModification() Group by the date_modification column
 * @method CommonTDocumentCollaboratifQuery groupByIdCreateur() Group by the id_createur column
 * @method CommonTDocumentCollaboratifQuery groupByNomCreateur() Group by the nom_createur column
 * @method CommonTDocumentCollaboratifQuery groupByPrenomCreateur() Group by the prenom_createur column
 *
 * @method CommonTDocumentCollaboratifQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDocumentCollaboratifQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDocumentCollaboratifQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDocumentCollaboratif findOne(PropelPDO $con = null) Return the first CommonTDocumentCollaboratif matching the query
 * @method CommonTDocumentCollaboratif findOneOrCreate(PropelPDO $con = null) Return the first CommonTDocumentCollaboratif matching the query, or a new CommonTDocumentCollaboratif object populated from the query conditions when no match is found
 *
 * @method CommonTDocumentCollaboratif findOneByIdParapheur(int $id_parapheur) Return the first CommonTDocumentCollaboratif filtered by the id_parapheur column
 * @method CommonTDocumentCollaboratif findOneByIdThemeParapheur(int $id_theme_parapheur) Return the first CommonTDocumentCollaboratif filtered by the id_theme_parapheur column
 * @method CommonTDocumentCollaboratif findOneByIdObjet(int $id_objet) Return the first CommonTDocumentCollaboratif filtered by the id_objet column
 * @method CommonTDocumentCollaboratif findOneByOrganisme(string $organisme) Return the first CommonTDocumentCollaboratif filtered by the organisme column
 * @method CommonTDocumentCollaboratif findOneByTitreDocument(string $titre_document) Return the first CommonTDocumentCollaboratif filtered by the titre_document column
 * @method CommonTDocumentCollaboratif findOneByTypeDocument(int $type_document) Return the first CommonTDocumentCollaboratif filtered by the type_document column
 * @method CommonTDocumentCollaboratif findOneByTypeObjet(int $type_objet) Return the first CommonTDocumentCollaboratif filtered by the type_objet column
 * @method CommonTDocumentCollaboratif findOneByStatut(int $statut) Return the first CommonTDocumentCollaboratif filtered by the statut column
 * @method CommonTDocumentCollaboratif findOneByDateCreation(string $date_creation) Return the first CommonTDocumentCollaboratif filtered by the date_creation column
 * @method CommonTDocumentCollaboratif findOneByDateModification(string $date_modification) Return the first CommonTDocumentCollaboratif filtered by the date_modification column
 * @method CommonTDocumentCollaboratif findOneByIdCreateur(int $id_createur) Return the first CommonTDocumentCollaboratif filtered by the id_createur column
 * @method CommonTDocumentCollaboratif findOneByNomCreateur(string $nom_createur) Return the first CommonTDocumentCollaboratif filtered by the nom_createur column
 * @method CommonTDocumentCollaboratif findOneByPrenomCreateur(string $prenom_createur) Return the first CommonTDocumentCollaboratif filtered by the prenom_createur column
 *
 * @method array findByIdDocument(int $id_document) Return CommonTDocumentCollaboratif objects filtered by the id_document column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonTDocumentCollaboratif objects filtered by the id_parapheur column
 * @method array findByIdThemeParapheur(int $id_theme_parapheur) Return CommonTDocumentCollaboratif objects filtered by the id_theme_parapheur column
 * @method array findByIdObjet(int $id_objet) Return CommonTDocumentCollaboratif objects filtered by the id_objet column
 * @method array findByOrganisme(string $organisme) Return CommonTDocumentCollaboratif objects filtered by the organisme column
 * @method array findByTitreDocument(string $titre_document) Return CommonTDocumentCollaboratif objects filtered by the titre_document column
 * @method array findByTypeDocument(int $type_document) Return CommonTDocumentCollaboratif objects filtered by the type_document column
 * @method array findByTypeObjet(int $type_objet) Return CommonTDocumentCollaboratif objects filtered by the type_objet column
 * @method array findByStatut(int $statut) Return CommonTDocumentCollaboratif objects filtered by the statut column
 * @method array findByDateCreation(string $date_creation) Return CommonTDocumentCollaboratif objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonTDocumentCollaboratif objects filtered by the date_modification column
 * @method array findByIdCreateur(int $id_createur) Return CommonTDocumentCollaboratif objects filtered by the id_createur column
 * @method array findByNomCreateur(string $nom_createur) Return CommonTDocumentCollaboratif objects filtered by the nom_createur column
 * @method array findByPrenomCreateur(string $prenom_createur) Return CommonTDocumentCollaboratif objects filtered by the prenom_createur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentCollaboratifQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDocumentCollaboratifQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDocumentCollaboratif', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDocumentCollaboratifQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDocumentCollaboratifQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDocumentCollaboratifQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDocumentCollaboratifQuery) {
            return $criteria;
        }
        $query = new CommonTDocumentCollaboratifQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTDocumentCollaboratif|CommonTDocumentCollaboratif[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDocumentCollaboratifPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTDocumentCollaboratif A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDocument($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTDocumentCollaboratif A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_document`, `id_parapheur`, `id_theme_parapheur`, `id_objet`, `organisme`, `titre_document`, `type_document`, `type_objet`, `statut`, `date_creation`, `date_modification`, `id_createur`, `nom_createur`, `prenom_createur` FROM `t_document_collaboratif` WHERE `id_document` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTDocumentCollaboratif();
            $obj->hydrate($row);
            CommonTDocumentCollaboratifPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonTDocumentCollaboratif|CommonTDocumentCollaboratif[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTDocumentCollaboratif[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocument(1234); // WHERE id_document = 1234
     * $query->filterByIdDocument(array(12, 34)); // WHERE id_document IN (12, 34)
     * $query->filterByIdDocument(array('min' => 12)); // WHERE id_document >= 12
     * $query->filterByIdDocument(array('max' => 12)); // WHERE id_document <= 12
     * </code>
     *
     * @param     mixed $idDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the id_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParapheur(1234); // WHERE id_parapheur = 1234
     * $query->filterByIdParapheur(array(12, 34)); // WHERE id_parapheur IN (12, 34)
     * $query->filterByIdParapheur(array('min' => 12)); // WHERE id_parapheur >= 12
     * $query->filterByIdParapheur(array('max' => 12)); // WHERE id_parapheur <= 12
     * </code>
     *
     * @param     mixed $idParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR, $idParapheur, $comparison);
    }

    /**
     * Filter the query on the id_theme_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdThemeParapheur(1234); // WHERE id_theme_parapheur = 1234
     * $query->filterByIdThemeParapheur(array(12, 34)); // WHERE id_theme_parapheur IN (12, 34)
     * $query->filterByIdThemeParapheur(array('min' => 12)); // WHERE id_theme_parapheur >= 12
     * $query->filterByIdThemeParapheur(array('max' => 12)); // WHERE id_theme_parapheur <= 12
     * </code>
     *
     * @param     mixed $idThemeParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdThemeParapheur($idThemeParapheur = null, $comparison = null)
    {
        if (is_array($idThemeParapheur)) {
            $useMinMax = false;
            if (isset($idThemeParapheur['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR, $idThemeParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idThemeParapheur['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR, $idThemeParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR, $idThemeParapheur, $comparison);
    }

    /**
     * Filter the query on the id_objet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdObjet(1234); // WHERE id_objet = 1234
     * $query->filterByIdObjet(array(12, 34)); // WHERE id_objet IN (12, 34)
     * $query->filterByIdObjet(array('min' => 12)); // WHERE id_objet >= 12
     * $query->filterByIdObjet(array('max' => 12)); // WHERE id_objet <= 12
     * </code>
     *
     * @param     mixed $idObjet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdObjet($idObjet = null, $comparison = null)
    {
        if (is_array($idObjet)) {
            $useMinMax = false;
            if (isset($idObjet['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_OBJET, $idObjet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idObjet['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_OBJET, $idObjet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_OBJET, $idObjet, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the titre_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTitreDocument('fooValue');   // WHERE titre_document = 'fooValue'
     * $query->filterByTitreDocument('%fooValue%'); // WHERE titre_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titreDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTitreDocument($titreDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titreDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titreDocument)) {
                $titreDocument = str_replace('*', '%', $titreDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT, $titreDocument, $comparison);
    }

    /**
     * Filter the query on the type_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDocument(1234); // WHERE type_document = 1234
     * $query->filterByTypeDocument(array(12, 34)); // WHERE type_document IN (12, 34)
     * $query->filterByTypeDocument(array('min' => 12)); // WHERE type_document >= 12
     * $query->filterByTypeDocument(array('max' => 12)); // WHERE type_document <= 12
     * </code>
     *
     * @param     mixed $typeDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTypeDocument($typeDocument = null, $comparison = null)
    {
        if (is_array($typeDocument)) {
            $useMinMax = false;
            if (isset($typeDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT, $typeDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT, $typeDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT, $typeDocument, $comparison);
    }

    /**
     * Filter the query on the type_objet column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeObjet(1234); // WHERE type_objet = 1234
     * $query->filterByTypeObjet(array(12, 34)); // WHERE type_objet IN (12, 34)
     * $query->filterByTypeObjet(array('min' => 12)); // WHERE type_objet >= 12
     * $query->filterByTypeObjet(array('max' => 12)); // WHERE type_objet <= 12
     * </code>
     *
     * @param     mixed $typeObjet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTypeObjet($typeObjet = null, $comparison = null)
    {
        if (is_array($typeObjet)) {
            $useMinMax = false;
            if (isset($typeObjet['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_OBJET, $typeObjet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeObjet['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_OBJET, $typeObjet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::TYPE_OBJET, $typeObjet, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE date_modification > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCreateur(1234); // WHERE id_createur = 1234
     * $query->filterByIdCreateur(array(12, 34)); // WHERE id_createur IN (12, 34)
     * $query->filterByIdCreateur(array('min' => 12)); // WHERE id_createur >= 12
     * $query->filterByIdCreateur(array('max' => 12)); // WHERE id_createur <= 12
     * </code>
     *
     * @param     mixed $idCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdCreateur($idCreateur = null, $comparison = null)
    {
        if (is_array($idCreateur)) {
            $useMinMax = false;
            if (isset($idCreateur['min'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_CREATEUR, $idCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCreateur['max'])) {
                $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_CREATEUR, $idCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_CREATEUR, $idCreateur, $comparison);
    }

    /**
     * Filter the query on the nom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCreateur('fooValue');   // WHERE nom_createur = 'fooValue'
     * $query->filterByNomCreateur('%fooValue%'); // WHERE nom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByNomCreateur($nomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCreateur)) {
                $nomCreateur = str_replace('*', '%', $nomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::NOM_CREATEUR, $nomCreateur, $comparison);
    }

    /**
     * Filter the query on the prenom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomCreateur('fooValue');   // WHERE prenom_createur = 'fooValue'
     * $query->filterByPrenomCreateur('%fooValue%'); // WHERE prenom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrenomCreateur($prenomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomCreateur)) {
                $prenomCreateur = str_replace('*', '%', $prenomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR, $prenomCreateur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDocumentCollaboratif $commonTDocumentCollaboratif Object to remove from the list of results
     *
     * @return CommonTDocumentCollaboratifQuery The current query, for fluid interface
     */
    public function prune($commonTDocumentCollaboratif = null)
    {
        if ($commonTDocumentCollaboratif) {
            $this->addUsingAlias(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $commonTDocumentCollaboratif->getIdDocument(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
